import React, { Component } from 'react';
import './App.css'; 
import '../node_modules/bootstrap/dist/css/bootstrap.min.css';
import ListView from './list-view';
import ListLabel from './list-label';

class MyComponent extends Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoaded: false,
      items: [],
      labels: [{title: 'Online'}, {title: 'Sessions'}, {title: 'Time Spent'}, {title: 'Level'}]
    };
  }
  
  componentDidMount() {
    fetch("http://172.22.0.79/sensotecapi/index.php?p=organigram&action=json")
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            isLoaded: true,
            items: result.items
          });
        },
        
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
      )
  }

  render() { 
    console.error(this.state);
    const { error, isLoaded, items, labels } = this.state;
    if (error) {
      return <div>Error: {error.message}</div>;
    } else if (!isLoaded) {
      return <div>Loading...</div>;
    } else {
      return ( 
        <div className="uid">

          <ListLabel labels={labels} />

          <ListView items={items} />

        </div>
      );
    }
  }
}
export default MyComponent; 