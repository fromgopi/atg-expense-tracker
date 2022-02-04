import {combineReducers} from "redux";
import categoryReducer from "./CategoryReducer";

const rootReducer = combineReducers({
    categoryData: categoryReducer
});

export default rootReducer;
