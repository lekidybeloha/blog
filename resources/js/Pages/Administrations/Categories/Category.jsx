import React from "react";
import {router, useForm, usePage} from "@inertiajs/react";

const Category = () => {
    const {categories} = usePage().props;
    const {data, setData, post, processing, errors} = useForm({
        'name': '',
        'status': 0,
    })

    const submit = (e) => {
        e.preventDefault();
        post(route('admin.category.create'));

    }

    const handleDelete = (e) => {
        e.preventDefault();
        if(confirm('Voulez vous vraiment supprimer cette catégorie ?') == true){
            let data = {
                '_method' : 'DELETE'
            }
            router.post(route('admin.category.delete', e.target.elements.category_id.value), data)
        }
    }

    return (
        <div className="container mt-3">
            <h2>Catégories</h2>
            <button className="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Créer une
                catégorie
            </button>
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
                        <tr key={category.id}>
                            <td>{category.id}</td>
                            <td>{category.name}</td>
                            <td>{category.status == 0 ?
                                (<span className="badge text-bg-warning">Inactive</span>) :
                                (<span className="badge text-bg-success">Actif</span>
                                )}</td>
                            <td>
                                <div className="d-flex">
                                    <a href={route('admin.category.edit', category.id)} className="btn">Edit</a>
                                    <form onSubmit={handleDelete}>
                                        <input type="hidden" name="category_id" value={category.id}/>
                                        <button type="submit" className="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    ))
                ) : (
                    <tr>
                        <td colSpan="4" className="text-center">Aucune catégorie</td>
                    </tr>
                )}
                </tbody>
            </table>

            <div className="modal fade" id="exampleModal" tabIndex="-1" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div className="modal-dialog">
                    <div className="modal-content">
                        <div className="modal-header">
                            <h1 className="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" className="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                        </div>
                        <form method="POST" onSubmit={submit}>
                            <div className="modal-body">
                                <h4>Créer une nouvelle catégorie</h4>
                                <input
                                    type="text"
                                    placeholder="Nom de la catégorie"
                                    className="form-control"
                                    value={data.name}
                                    onChange={e => setData('name', e.target.value)}
                                />
                                <div className="form-check form-switch">
                                    <input
                                        className="form-check-input"
                                        name="status"
                                        value="1"
                                        type="checkbox"
                                        role="switch"
                                        id="flexSwitchCheckDefault"
                                        onChange={e => setData('status', e.target.value)}
                                    />
                                    <label className="form-check-label" htmlFor="flexSwitchCheckDefault">Actif</label>
                                </div>
                            </div>
                            <div className="modal-footer">
                                <button type="button" className="btn btn-secondary" data-bs-dismiss="modal">Annuler
                                </button>
                                <button type="submit" className="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    )
}

export default Category;
