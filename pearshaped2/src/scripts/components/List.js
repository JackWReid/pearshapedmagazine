import React from 'react';

import Story from './Story';

import styles from './List.css';

class List extends React.Component {
render () {
    const { content } = this.props;

    return <div className={styles.root}>
      {content.map(function(story, i) {
        return <Story data={story} key={i} />
      })}
    </div>
  }
}

export default List;
