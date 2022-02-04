import {ERROR_TYPE, GET_CATEGORIES, LOAD_CATEGORIES} from "../commons/types";
import baseUrl from "../config/config";

/**
 * Service that gets all the categories from backend using axios.
 * @type {{loadCategories(*): void}}
 */
const CategoryService = {
    /**
     * It will load all the services from the backend using axios.
     * @param dispatch
     */
    loadCategories(dispatch) {
        dispatch({
            type: LOAD_CATEGORIES,
            payload: null
        })
        baseUrl.get('/category')
            .then( categories => {
                console.log(categories.data)
                dispatch({
                    type: GET_CATEGORIES,
                    payload: categories.data
                });
            })
            .catch((err) => {
                dispatch({
                    type: ERROR_TYPE,
                    payload: err
                })
            });
    }
}
export default CategoryService;



