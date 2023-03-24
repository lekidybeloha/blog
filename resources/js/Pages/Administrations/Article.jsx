import React from "react";
import {usePage} from "@inertiajs/react";
const Article = () => {
    const {articles} = usePage().props;
    return (
        <div className="container mt-3">
            <h2>Articles</h2>
            <button className="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Créer un article</button>
            <table className="table table-light mt-3">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                {articles.length > 0 ? (
                    articles.map(article => (
                        <tr>
                            <td>{article.id}</td>
                            <td>{article.title}</td>
                            <td>{article.category_name}</td>
                            <td>

                            </td>
                        </tr>
                    ))
                ) : (
                    <tr><td colSpan="4" className="text-center">Aucun article</td></tr>
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
                            <h4>Créer un article</h4>
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

export default Article;
