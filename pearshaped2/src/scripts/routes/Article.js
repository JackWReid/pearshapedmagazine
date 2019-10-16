import React from 'react';

import { getStory } from '../req';

import styles from './Article.css';

export default class Article extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      article: null,
    }
  }

  componentDidMount() {
    getStory(this.props.params.articleId, (data) => {
      this.setState({article: data});
    });
  }

  render() {
    if (this.state.article) {
      return <div>
        <h1 className={styles.title} dangerouslySetInnerHTML={{__html: this.state.article.title.rendered}} />
        <div className={styles.body} dangerouslySetInnerHTML={{__html: this.state.article.content.rendered}} />
      </div>
    } else {
      return <div></div>
    }
  }
}
