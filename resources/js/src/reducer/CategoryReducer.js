import {ERROR_TYPE, GET_CATEGORIES, LOAD_CATEGORIES} from "../commons/types";

const initialState = {
    categoryList: [],
    loading: true,
    error: false
}

/**
 * Reducer function for Category
 * @param state
 * @param action
 */
const categoryReducer = ( state = initialState, action ) => {
    switch (action.type) {
        case LOAD_CATEGORIES:
            return { ...state, categoryList: [], error: false, loading: true }
        case GET_CATEGORIES:
            return { ...state, categoryList: action.payload, error: false, loading: false}
        case ERROR_TYPE:
            console.log("error type reducer is called ")
            return { ...state, categoryList: [], error: true, loading: false}
        default:
            return state
    }
}

export default categoryReducer;
