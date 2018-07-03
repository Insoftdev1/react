import React, { Component } from 'react';

class ListLabel extends Component {
  render() {
    const labels = this.props.labels;
    return(
      <ul className="list-inline hc1">
      {labels.map(label => (
      <li key="{label.title}"><strong>{label.title}</strong></li>
      ))} 
      </ul>
    )
  }
}

export default ListLabel;