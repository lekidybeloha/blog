import React from "react";
import {useForm, usePage} from "@inertiajs/react";

const Edit = () => {
    const {category} = usePage().props;
    const {data, setData, post, processing, errors} = useForm({
        'category_id': category.id,
        'name': category.name,
        'status': category.status,
        '_method': 'PUT',
    })

    const submit = (e) => {
        e.preventDefault();
        post(route('admin.category.edit.post', category.id));
    }

    return (
        <div className="container">
            <form method="POST" onSubmit={submit}>
                <div className="mb-3">
                    <label htmlFor="categoryName" className="form-label">Nom</label>
                    <input
                        type="text"
                        className="form-control"
                        id="categoryName"
                        placeholder="Nom"
                        name="name"
                        value={data.name}
                        onChange={e => setData('name', e.target.value)}
                    />
                </div>
                <div className="form-check form-switch">
                    <input
                        className="form-check-input"
                        name="status"
                        value="1"
                        type="checkbox"
                        role="switch"
                        id="categoryStatus"
                        checked={data.status == '1' ? true : false}
                        onChange={e => setData('status', e.target.value)}
                    />
                    <label className="form-check-label" htmlFor="categoryStatus">Actif</label>
                </div>
                <button type="submit" className="btn btn-primary">Mettre à jour</button>
            </form>
        </div>
    )
}

export default Edit;
