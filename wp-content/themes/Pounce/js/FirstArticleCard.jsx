import React, { Component } from 'react';
import { Link } from 'react-router';

export default class FirstArticleCard extends Component {
    constructor(props) {
    super(props);
    this.state = {title: props.article.title.rendered, imageID: '', authorID: '', isLoading: true, };
  }

  componentWillMount() {
    this.Mounted = true;
    this.fetchAuthor();
    if (this.props.article.featured_media == 0) {
      this.setState({ title: this.props.article.title.rendered, imageID: '', isLoading: false})
    }
    else {
      this.fetchImage();
    }
    this.isCartoon();
  }

  componentWillUnmount() {
    this.Mounted = false;
  }

  setURL() {

    return ('https://tuftsdaily.com/wp-json/wp/v2/media/' + (this.props.article.featured_media).toString());
  }

  async fetchImage() {
      try {
        let response = await fetch(this.setURL());
        let responseJson = await response.json();
        if (this.Mounted) {
          this.setState({ imageID: responseJson.media_details.sizes.medium.source_url, isLoading: false });
        }
      } catch(error) {
        console.error(error);
      }
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
        //console.log(this.state.articles[i].content.rendered)
        var url = this.props.article.content.rendered.match(expression)[1];
        var width = this.props.article.content.rendered.match(expression2)[0].slice(0,3);
        var height = this.props.article.content.rendered.match(expression2)[0].slice(4,7);
        console.log(width);
        console.log(height);
        this.setState({cartoonURL: url, isCartoon: true, cartoonWidth: width, cartoonHeight: height });
      }
    }

    render() {
        if (this.state.isLoading) {
            return (
              <div></div>
            );
        }
        else if (this.state.isCartoon) {
            return (
                <div className="side-bar">
                <Link to={`/article/${this.props.article.id}`} className="link-bar">
                  <img className="pic-article-side" src={this.state.cartoonURL} alt="cartoon"/>
                  <div className="lead-title-article-side">{this.state.title}</div>
                  <div className="main-page-article-side">Some article content</div>
                  <div className="author-side-bar">{this.state.authorID}</div>
                  <hr className="aricle-divider"/>
                </Link>
                </div>
            );
        }
        else if (this.props.article.featured_media == 0 ) {
            return (
                <div className="side-bar">
                <Link to={`/article/${this.props.article.id}`} className="link-bar">
                  <div className="lead-title-article-side">{this.state.title}</div>
                  <div className="main-page-article-side">Some article content</div>
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
                  <img className="pic-article-side" src={this.state.imageID} alt="image"/>
                  <div className="lead-title-article-side">{this.state.title}</div>
                  <div className="main-page-article-side">Some article content</div>
                  <div className="author-side-bar">{this.state.authorID}</div>
                  <hr className="aricle-divider"/>
                </Link>
                </div>
            );
        }
    }
}

