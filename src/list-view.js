import React, { Component } from 'react';

function livefunc(livedate) { 
  if (livedate) {
    return livedate;
  } 
  return <span className="green"></span>;
}

class ListView extends Component {
  render() {
    const items = this.props.items;
    return(
		<div>
        {items.map(item => (
          <div>
          <ul className="list-inline hc1">
          <li className="f-left" key={item.name}> {item.name}</li>
          <li key={item.online}> {item.online}</li>
          <li key={item.sessions}> {item.sessions}</li>
          <li key={item.time_spent}> {item.time_spent}</li>
          <li key={item.level}> {item.level}</li> 
          </ul>   
          <hr></hr>
          <hr></hr>
            {item.instructor.map(item1 => (
           <div>
            <div className="ml-100">
            <ul className="list-inline hc2">
            <li className="f-left-w" key={item1.name}> {item1.name}<img src={item1.image} width="30" alt={item1.name}/></li>
            <li key={item1.online}> {item1.online}</li>
            <li key={item1.sessions}> {item1.sessions}</li>
            <li key={item1.time_spent}> {item1.time_spent}</li>
            <li key={item1.level}> {item1.level}</li> 
            </ul>  
            <div className="clearfix"></div>
            <hr className="hr-class"></hr>
            <hr className="hr-class"></hr>
            </div>
            <div className="ml-150">
               {item1.students.map(item2 => ( 
                  <div>
                  <ul className="list-inline hc2">
                  <li className="f-left-w" key={item2.name}> {item2.name}<img src={item2.image} width="30"  alt={item2.name}/></li>
                  <li key={item2.online}> {livefunc(item2.online)} </li>
                  <li key={item2.sessions}> {item2.sessions}</li>
                  <li key={item2.time_spent}> {item2.time_spent}</li>
                  <li key={item2.level}>{item2.level}</li> 
                  </ul>  
                  <div className="clearfix"></div>
                  <hr className="hr-class"></hr>
                  </div>
                ))}
               
                </div>
                <hr></hr>
                <hr></hr>
                </div>
            ))} 
             </div>
         ))}
         </div> 
    )
  }
}

export default ListView;