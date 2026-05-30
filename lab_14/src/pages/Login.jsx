import { useNavigate } from 'react-router-dom';

const Login = () => {
    const navigate = useNavigate();

    const handleLogin = (e) => {
        e.preventDefault(); 
        alert("Login Successful! Redirecting...");
        navigate('/dashboard'); // This is the programmatic navigation to the Dashboard page after login
    };

    return (
        <div>
            <h1>Login Page</h1>
            <form onSubmit={handleLogin}>
                <input type="text" placeholder="Username" required style={{marginRight: '10px'}}/>
                <input type="password" placeholder="Password" required style={{marginRight: '10px'}}/>
                <button type="submit">Login</button>
            </form>
        </div>
    );
};
export default Login;