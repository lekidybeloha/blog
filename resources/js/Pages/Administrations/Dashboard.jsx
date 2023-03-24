import React from "react";
import {usePage} from "@inertiajs/react";

const Dashboard = () => {
    const {articles, categories} = usePage().props;

    return(
        <div className="container mt-3">
            <div className="row">
                <div className="col-md-6">
                    <div className="card">
                        <div className="card-body">
                            <div className="card-title">
                                Articles
                            </div>
                            <div className="card-title">
                                <p>Nombres d'articles disponibles : {articles}</p>
                                <a href="#" className="btn btn-primary">Gérer les articles</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-md-6">
                    <div className="card">
                        <div className="card-body">
                            <div className="card-title">
                                Catégories
                            </div>
                            <div className="card-title">
                                <p>Nombres de catégories disponibles : {categories}</p>
                                <a href="#" className="btn btn-primary">Gérer les catégories</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Dashboard;
