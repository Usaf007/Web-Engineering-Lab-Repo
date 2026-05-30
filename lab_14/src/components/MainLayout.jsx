import { Link, Outlet } from 'react-router-dom';

const MainLayout = () => {
    return (
        <div style={{ fontFamily: 'Arial, sans-serif' }}>
            <nav style={{ padding: '15px', backgroundColor: '#333', marginBottom: '20px' }}>
                <Link to="/" style={{ margin: '0 15px', color: 'white', textDecoration: 'none' }}>Home</Link>
                <Link to="/about" style={{ margin: '0 15px', color: 'white', textDecoration: 'none' }}>About</Link>
                <Link to="/contact" style={{ margin: '0 15px', color: 'white', textDecoration: 'none' }}>Contact</Link>
                <Link to="/product/99" style={{ margin: '0 15px', color: '#4CAF50', textDecoration: 'none' }}>Test Product 99</Link>
                <Link to="/login" style={{ margin: '0 15px', color: '#ff9800', textDecoration: 'none' }}>Login</Link>
            </nav>
            
            <main style={{ padding: '0 20px' }}>
                {/* The dynamic components will inject right here */}
                <Outlet />
            </main>
        </div>
    );
};
export default MainLayout;