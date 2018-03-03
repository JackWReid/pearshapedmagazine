import React from 'react';
import { Link } from 'react-router';

import { distanceInWordsToNow } from 'date-fns';

import { getStory, getMediaLink } from '../req';

import styles from './Story.css';

class Story extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      image: null,
      loading: false,
    }
  }

  componentDidMount() {
    this.updateImage(this.props.data);
  }

  componentWillReceiveProps(nextProps) {
    this.updateImage(nextProps.data);
  }

  updateImage(data) {
    this.setState({loading: true});
    getMediaLink(data.featured_media, (data) => {
      this.setState({
        image: data.source_url,
        loading: false
      });
    });
  }

  render() {
    const id = this.props.data.id;
    const title = this.props.data.title.rendered;
    const date = this.props.data.date;
    const image = this.state.image;
    const body = this.props.data.content.rendered;

    if (this.state.loading) {
      return <div className={styles.loading}>Loading</div>
    }
    return <div className={styles.root}>
      <img className={styles.image} src={image} />
      <div className={styles.info}>
        <Link to={`/article/${id}`}><h1 className={styles.title} dangerouslySetInnerHTML={{__html: title}} /></Link>
        <h2 className={styles.subtitle}>{distanceInWordsToNow(date)} ago</h2>
      </div>
    </div>
  }
}

export default Story;
