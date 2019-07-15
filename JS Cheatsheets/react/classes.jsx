class Clock {
    constructor(props) {
        //some code here
    }
}

class Alarm extends Clock {
    constructor (props) {
        super() // if you want to use the constructor of parent and not to overwite it
        //some code here

        this.state = { 
            title: props.title  // state has to be declared in constructir
        }
    }


}

//modifying state from outside

let a1 = new Alarm;
a1.setState = "Alarm is set";

//changing the state from the class

this.setState(snapshotOfPrevState => {
    //code somehow modifying the previous state
}); 

