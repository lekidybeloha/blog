import React from "react";
import {usePage} from "@inertiajs/react";
const Category = () => {
    const {categories} = usePage().props;
    return (
        <div className="container mt-3">
            <h2>Catégories</h2>
            <button className="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Créer une catégorie</button>
            <table className="table table-light mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Statut</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {categories.length > 0 ? (
                    categories.map(category => (
                        <tr>
                            <td>{category.id}</td>
                            <td>{category.name}</td>
                            <td>{category.status == 0 ?
                                (<span className="badge text-bg-warning">Inactive</span>) :
                                (<span className="badge text-bg-success">Actif</span>
                                )}</td>
                            <td>

                            </td>
                        </tr>
                    ))
                ) : (
                    <tr><td colSpan="4" className="text-center">Aucune catégorie</td></tr>
                )}
                </tbody>
            </table>

            <div className="modal fade" id="exampleModal" tabIndex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h1 className="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" className="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div className="modal-body">
                            <h4>Créer une nouvelle catégorie</h4>
                            <form method="POST">

                            </form>
                        </div>
                        <div className="modal-footer">
                            <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" className="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    )
}

export default Category;
