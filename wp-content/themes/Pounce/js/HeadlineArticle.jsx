import React, { Component } from 'react';
import { Link } from 'react-router';

export default class HeadlineArticle extends Component {
    constructor(props) {
        super(props);
        this.state = {title: props.article.title.rendered, authorID: props.article.author, isLoading: true, isLast: props.isLast, cartoonWidth: 0, cartoonHeight: 0};
    }

    componentWillMount() {
        this.Mounted = true;
        this.fetchAuthor();
        this.isCartoon();
    }

    componentWillUnmount() {
        this.Mounted = false;
    }

    setAuthorURL() {
        return ('https://tuftsdaily.com/wp-json/wp/v2/users/' + this.props.article.author)
    }

    async fetchAuthor() {
      try {
        let response = await fetch(this.setAuthorURL());
        let responseJson = await response.json();
        if (this.Mounted) {
        this.setState({ authorID: responseJson.name });
      }
      } catch(error) {
        console.error(error);
      }
    }

    isCartoon() {
      var codeLine = this.state.title
      var firstWord = codeLine.substr(0, codeLine.indexOf(" "));
      if (firstWord == 'Cartoon:') {
        var expression = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,256}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/g;
        var expression2 =/........(?:png|jpg)/g;
        var url = this.props.article.content.rendered.match(expression)[1];
        var width = this.props.article.content.rendered.match(expression2)[0].slice(0,3);
        var height = this.props.article.content.rendered.match(expression2)[0].slice(4,7);
        this.setState({cartoonURL: url, isCartoon: true, cartoonWidth: width, cartoonHeight: height });
      }
    }

    render() {
        if (this.props.isLoading) {
            return (
              <div></div>
            )
          }
          else if (this.state.isCartoon) {
            return (
                <div className="side-bar">
                  <Link to={`/article/${this.props.article.id}`} className="link-bar">
                    <img className="pic-article-side" src={this.state.cartoonURL} alt="cartoon"/>
                    <div className="author-side-bar">{this.state.authorID}</div>
                    <hr className="aricle-divider"/>
                  </Link>
                </div>
            );
          }
          else {
            return (
                <div className="side-bar">
                  <Link to={`/article/${this.props.article.id}`} className="link-bar">
                    <div className="other-title-article-side">{this.state.title}</div>
                    <div className="author-side-bar">{this.state.authorID}</div>
                    <hr className="aricle-divider"/>
                  </Link>
                </div>
            );
        }
    }
}