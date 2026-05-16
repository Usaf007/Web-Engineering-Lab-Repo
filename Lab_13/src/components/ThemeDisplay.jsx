import { useContext } from 'react';
import { ThemeContext } from './ThemeContext.jsx';

const ThemeDisplay = () => {
    // Tune in to the ThemeContext to get the current theme
    const { theme } = useContext(ThemeContext);
    
    return (
        <p>The current UI theme is: <strong>{theme}</strong></p>
    );
};

export default ThemeDisplay;