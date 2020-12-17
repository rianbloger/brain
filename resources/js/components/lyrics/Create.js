import React from 'react';
import ReactDOM from 'react-dom';
import swal from 'sweetalert';



function Create(props) {
    return (
        <div>ABC</div>
    );
}

export default Create;

if (document.getElementById('create-lyric')) {
    var item = document.getElementById('create-lyric');
    ReactDOM.render(<Create endpoint={endpoint} />, item);    
    
}
