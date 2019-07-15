//to import React  (this loads all React libraries)
import React from "react";
import ReactDOM from "react-dom";

//
import React, { Component } from "react"; //loads only the Component library, which saves size of bundle.js after compilaiton

//to import a class from another files
import Message from "./message/message.jsx";
//in the same time you need to export the class in that file as well
export default class Message extends React.Component {
  //some code here for the class
}

//to load html file
import "./index.html";

//*** CLASS APPROACH

class newObject extends React.Component {
  //if you loaded all React libs
}

class newObject extends Component {
  // if you just loaded React Component

  render() {
    return (
      <>
        {" "}
        {/*render always renders just one main DOM element (with unlimited children), if you want to render more, use those brackets*/}
        <h1>some</h1>
        <p>Some text here</p>
        <button>
          {
            this.props
              .button /*curly brackets open JS, props are passed to the class when its being made*/
          }
        </button>
      </>
    );
  }
}

//*** FUNCTIONAL APPROACH

const react = () => {
  return <div />;
};

ReactDOM.render(
  <newObject button="Props text in the button" />,
  document.querySelector("#id-of-element")
);
