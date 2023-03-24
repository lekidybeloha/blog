import './bootstrap';
import 'bootstrap'
import React from 'react';
import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'
import Layout from './Layout';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true });
        let page = pages[`./Pages/${name}.jsx`];
        //We define here that all the pages in our Inertia/React app will be encapsulated inside the Layout Component
        page.default.layout = page.default.layout || (page => <Layout children={page} />)
        return page;
    },
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />)
    },
})
