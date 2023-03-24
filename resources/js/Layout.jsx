import React from 'react';

const Layout = ({children}) => {
    const active = route().current();

    return (
        <div>
            <nav className="navbar navbar-expand-lg bg-body-tertiary">
                <a className="navbar-brand mt-2" href="#">Administration - Blog</a>

                <div className="collapse navbar-collapse">
                    <div className="d-flex ms-auto me-5">
                        <img src="" className="img-thumbnail rounded-circle" alt="EV"/>
                    </div>
                </div>
            </nav>
            <div className="container-fluid ">
                <div className="row">
                    <div className="col-md-2 pt-5 bg-body-secondary">
                        <ul className="nav flex-column nav-pills">
                            <li className="nav-item">
                                <a className={`nav-link ${active.includes('dashboard') ? 'active' : ''}`}
                                   href={route('admin.dashboard')}>Dashboard</a>
                            </li>
                            <li className="nav-item">
                                <a className={`nav-link ${active.includes('category') ? 'active' : ''}`}
                                   href={route('admin.category')}>Categories</a>
                            </li>
                            <li className="nav-item">
                                <a className={`nav-link ${active.includes('article') ? 'active' : ''}`}
                                   href={route('admin.article')}>Articles</a>
                            </li>
                        </ul>
                    </div>
                    <div className="col-md-10">
                        {children}
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Layout;
