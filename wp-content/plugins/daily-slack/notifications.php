<?php
/*
  Plugin Name: Tufts Daily Slack Integration
  Plugin URI: https://github.com/TuftsDaily/wordpress-slack
  Description: Sends notifications to the correct slack channel when a post status changes
  Author: Nitesh Gupta and Maxwell Bernstein
  Author URI:
  Version: 1.0
*/

/* TODO: Change private key to environment variable */


/*
  Takes a channel (string) and message (string).
  Returns a boolean for success/fail.
*/
function send_message ($channel, $message) {
    $data = array("channel" => "#$channel",
                  "username" => "editbot",
                  "text" => $message,
                  "mrkdwn" => true,
                  "icon_emoji" => ":ghost:");

    $data_string = json_encode($data);

    $ch = curl_init("https://hooks.slack.com/services/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");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST,  "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS,     $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER,     array("Content-Type: application/json",
                                                   "Content-Length: " . strlen($data_string)));
    $result = curl_exec($ch);
    return ($result == "ok");
}

/**
 * Send a message to the correct slack channel when a post changes status
 *
 * 
 *
 * @param string $new_status New post status
 * @param string $old_status Old post status (empty if the post was just created)
 * @param object $post The post being updated
 * @return bool $send_notif Return true to send the slack notification, return false to not
 */
function efx_slack_hooks( $new_status, $old_status, $post ) {
	global $edit_flow;

	if ($new_status == $old_status) return false;

    // When the post is first created, you might want to automatically set
    // all of the user"s user groups as following the post
	$post_url = get_edit_post_link($post->ID);
	$author = wp_get_current_user();
	$author_name = $author->display_name;
	$next = $status_next[$exploded[0]];

    if ($new_status == "to-be-copy-edited") {
        $slack_message = "$author_name just edited \"$post->post_title\". It is now ready to be CE1'd. - Click <$post_url|here> to edit.";
        send_message("ce2", $slack_message);
        return 1;
    }

	$exploded = explode("-", $new_status);
	$approved_statuses = array("draft","firsted","seconded");
	if (!in_array($exploded[0], $approved_statuses)) return 0; 

	// Used to determine what the next level of editing is.
	// Old statuses:
    // $status_next = array("draft" => "firsted", "firsted" => "seconded", "seconded" => "exec'd", "exec'd" => "???");
	// For the switch (PLEASE USE CONSISTENT NAMING!!):
    $status_next = array(
        "draft" => "to-be-copy-edited",
        "to-be-copy-edited" => "copyedited",
        "copyedited" => "exec'd",
        "exec'd" => "published"
    );

    if ($exploded[0] == "draft") {
        $next = "edited by an editor";
    }

    $slack_message = "$author_name just edited \"$post->post_title\". It is now ready to be $next. - Click <$post_url|here> to edit.";
    $channel = $exploded[1];
    send_message($channel, $slack_message);

	return 1;
}
add_filter( "ef_notification_status_change", "efx_slack_hooks", 10, 3 );
