import React, {useEffect} from "react";
import {useDispatch, useSelector} from "react-redux";
import Categoryservice from "../services/Categoryservice";
import loader from '../../../images/loader.gif';

const Category = () => {
    const dispatch = useDispatch();
    const categories = useSelector((state) => state.categoryData);
    useEffect(() => {
        Categoryservice.loadCategories(dispatch);
    }, [dispatch])
    console.log(categories)
    const errorContainer = () => {
        return <div><img src={loader} alt="loading ..." title="loading ..." className="loading"/></div>
    }
    const showLoader = () => {
        return(
            <div>
                <img src={loader} alt="loading ..." title="loading ..."/>
            </div>
        ) 
    }
    const renderData = (cate) => {
        return (
            cate.error ? errorContainer() :
                <table className="cat-table">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Category Name</td>
                        </tr>
                    </thead>
                    <tbody>
                        {cate.categoryList.map((cat, index) =>
                            <tr key={index}>
                                <td>{cat.id}</td>
                                <td>{cat.name}</td>
                            </tr>
                        )}
                    </tbody>
                </table>
        )
    }
    return(
        categories.loading ? showLoader() : renderData(categories)
    )
}

export default Category;
