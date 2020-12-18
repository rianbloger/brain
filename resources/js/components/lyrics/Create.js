import React from 'react';
import ReactDOM from 'react-dom';
import swal from 'sweetalert';



function Create(props ) {
    const show = () =>{
        console.log(props.endpoint);
    }
    return (
        <button onClick={show}>Show</button>
    );
}

export default Create;
 
if (document.getElementById('create-lyric')) {
    var item = document.getElementById('create-lyric');
    ReactDOM.render(<Create endpoint={item.getAttribute('endpoint')} />, item);    
    
}
