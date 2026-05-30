import { createBrowserRouter, RouterProvider } from 'react-router-dom';

import MainLayout from './components/MainLayout.jsx';

import Home from './pages/Home.jsx';
import About from './pages/About.jsx';
import Contact from './pages/Contact.jsx';
import Product from './pages/Product.jsx';
import Login from './pages/Login.jsx';
import Dashboard from './pages/Dashboard.jsx';

// Central Route Configuration
const router = createBrowserRouter([
  {
    path: "/",
    element: <MainLayout />, // The App Shell
    children: [
      { index: true, element: <Home /> },        
      { path: 'about', element: <About /> }, 
      { path: 'contact', element: <Contact /> },
      { path: 'product/:productId', element: <Product /> }, // Task 2
      { path: 'login', element: <Login /> },                // Task 3
      { path: 'dashboard', element: <Dashboard /> }         // Task 3
    ]
  }
]);

function App() {
  return <RouterProvider router={router} />;
}

export default App;