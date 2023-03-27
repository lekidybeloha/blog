import React, {useEffect, useRef} from "react";
import {useForm, usePage} from "@inertiajs/react";
import {Editor} from "@tinymce/tinymce-react";

const Create = () => {
    const {tiny_key, categories, user_id} = usePage().props;
    const editorRef = useRef(null);
    const {data, setData, post, processing, errors} = useForm({
        'title': '',
        'content': '',
        'category_id': '',
        'status': 1,
        'user_id': user_id,
    })

    const submit = (e) => {
        e.preventDefault();
        console.log(editorRef.current.getContent());

        console.log(data);
        post(route('admin.article.store'), data);
    }

    return(
        <div className="container">
            <form onSubmit={submit}>
                <div className="mb-3">
                    <label htmlFor="category" className="form-label">Catégorie</label>
                    <select className="form-select" onChange={(e) => setData('category_id', e.target.value)}>
                        <option value=""></option>
                        {categories.map((category) => (
                            <option key={category.id} value={category.id}>{category.name}</option>
                        ))}
                    </select>
                </div>
                <div className="mb-3">
                    <label htmlFor="title" className="form-label">Titre</label>
                    <input
                        type="text"
                        className="form-control"
                        id="title"
                        placeholder="name@example.com"
                        value={data.title}
                        onChange={e => setData('title', e.target.value)}
                    />
                </div>
                <div className="mb-3">
                    <label htmlFor="content" className="form-label">Contenu</label>
                    <Editor
                        apiKey={tiny_key}
                        onInit={(evt, editor) => editorRef.current = editor}
                        initialValue=""
                        init={{
                            plugins: [
                                'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
                                'searchreplace', 'visualblocks', 'code', 'fullscreen',
                                'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount', 'codesample'
                            ],
                            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }'
                        }}
                        onChange={() => setData('content', editorRef.current.getContent())}
                    />
                </div>
                <button className="btn btn-primary" type="submit">Enregistrer</button>
            </form>
        </div>
    )
}

export default Create;
