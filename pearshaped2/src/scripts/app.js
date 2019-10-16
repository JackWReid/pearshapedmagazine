import React from 'react';
import { render } from 'react-dom';
import { Router, Route, Link, browserHistory } from 'react-router';

import Home from './routes/Home';
import Article from './routes/Article';

import appStyles from './appStyles.css';

class App extends React.Component {
  render() {
    return <div className={appStyles.root}>
      <h1 className={appStyles.appTitle}><Link to="/home">PearShaped Magazine</Link></h1>

      <div>
        {this.props.children}
      </div>
    </div>
  }
}

const NoMatch = () => {
  return <div>404</div>
}

const Routes = () => {
  return <Router history={browserHistory}>
    <Route path="/" component={App}>
      <Route path="/home" component={Home} />
      <Route path="/article/:articleId" component={Article} />
      <Route path="*" component={NoMatch}/>
    </Route>
  </Router>;
}

render(Routes(), document.getElementById('app'));
