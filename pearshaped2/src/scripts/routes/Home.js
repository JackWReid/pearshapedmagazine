import React from 'react';

import { getStories } from '../req';

import List from '../components/List';

import styles from './Home.css';

export default class Home extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      stories: [],
      searchQuery: null,
      page: 1,
    }
  }

  componentDidMount() {
    getStories({
      before: new Date(),
      categories: [12]
    }, (data) => {
      this.setState({stories: data});
    });
  }

  loadMore() {
    const currentPage = this.state.page;
    const nextPage = currentPage + 1;

    if (this.state.searchQuery === null) {
      getStories({
        page: nextPage,
        before: new Date(),
      }, (data) => {
        const oldStories = this.state.stories;
        const newStories = oldStories.concat(data);
        this.setState({
          stories: newStories,
          page: nextPage,
        });
      });
    } else {
      getStories({
        page: nextPage,
        before: new Date(),
        search: this.state.searchQuery,
      }, (data) => {
        const oldStories = this.state.stories;
        const newStories = oldStories.concat(data);
        this.setState({
          stories: newStories,
          page: nextPage,
        });
      });
    }
  }

  searchStories(e) {
    if (e.target.value === "") {
      this.setState({
        searchQuery: null,
      });
    } else {
      this.setState({
        searchQuery: e.target.value,
      });
      getStories({
        before: new Date(),
        search: e.target.value,
      }, (data) => {
        this.setState({
          stories: data,
        });
      });
    }
  }

  render () {
    return <div className={styles.root}>
      <input className={styles.appSearch} onChange={this.searchStories.bind(this)}></input>
      <List content={this.state.stories} />
      <a className={styles.loadMore} onClick={this.loadMore.bind(this)}>More</a>
    </div>;
  }
}
