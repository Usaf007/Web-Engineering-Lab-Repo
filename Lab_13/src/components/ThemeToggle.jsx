import { useContext } from 'react';
import { ThemeContext } from './ThemeContext.jsx';

const ThemeToggle = () => {
    // Tune in to the PA system to get the toggle function
    const { toggleTheme } = useContext(ThemeContext);
    
    return (
        <button onClick={toggleTheme}>
            Switch Theme
        </button>
    );
};

export default ThemeToggle;