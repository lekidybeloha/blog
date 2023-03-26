import React from "react";
import {usePage} from "@inertiajs/react";
const Article = () => {
    const {articles} = usePage().props;
    return (
        <div className="container mt-3">
            <h2>Articles</h2>
            <a href={route('admin.article.create')} className="btn btn-primary">Créer un article</a>
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
                        <tr key={article.id}>
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
        </div>
    )
}

export default Article;
