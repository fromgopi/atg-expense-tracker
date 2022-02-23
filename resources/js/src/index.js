import React from 'react';
import ReactDOM from 'react-dom';
import { Provider } from 'react-redux';
import Main from './component/Main';
import store from './store';


if(document.getElementById("atg-et")){
    ReactDOM.render(
        <Provider store={store}>
            <React.StrictMode>
                <Main/>
            </React.StrictMode>
        </Provider>,
        document.getElementById("atg-et")
    )
}


