import axios from 'axios';

export function getStories(params, cb) {
  axios.get('http://pearshapedexeter.com/wp-json/wp/v2/posts', {params})
    .then(res => {
      cb(res.data);
    })
    .catch(error => {
      console.error(error);
    });
}

export function getStory(id, cb) {
  axios.get(`http://pearshapedexeter.com/wp-json/wp/v2/posts/${id}`)
    .then(res => {
      cb(res.data);
    })
    .catch(error => {
      console.error(error);
    });
}

export function getMediaLink(id, cb) {
  axios.get(`http://pearshapedexeter.com/wp-json/wp/v2/media/${id}`)
    .then(res => {
      cb(res.data);
    })
    .catch(error => {
      console.error(error);
    });
}
