import { divide } from 'lodash';
import React from 'react';
import ReactDOM from 'react-dom';
import swal from 'sweetalert';



function Create(props ) {
    const show = () =>{
        console.log(props.endpoint);
    }
    return (
        <div className="card">
            <div className="card-header">{props.title}</div>
            <div className="card-body">
                <form onSubmit={store}>
                    button:submit.btn btn-primary
                </form>
            </div>
        </div>
    );
}

export default Create;
 
if (document.getElementById('create-lyric')) {
    var item = document.getElementById('create-lyric');
    ReactDOM.render(<Create title={item.getAttribute('title')} endpoint={item.getAttribute('endpoint')} />, item);    
    
}
