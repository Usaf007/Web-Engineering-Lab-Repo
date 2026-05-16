//import Counter from './components/Counter.jsx';
//import ToggleText from './components/ToggleText.jsx';
//import TitleUpdater from './components/TitleUpdater.jsx';
//import { ThemeContext } from './components/ThemeContext.jsx';
//import ThemeDisplay from './components/ThemeDisplay.jsx';
//import ThemeToggle from './components/ThemeToggle.jsx';
//import { useState } from 'react';
//import ReducerCounter from './components/ReducerCounter.jsx';
import AutoFocusForm from './components/AutoFocusForm.jsx';
function App() {

  // const [theme, setTheme] = useState('light');
  
  // const toggleTheme = () => {
  //     setTheme(theme === 'light' ? 'dark' : 'light');
  // };
  return (
    <div >
      {/* <Counter /> */}
      {/* <ToggleText /> */}
      {/* <TitleUpdater /> */}
      {/* <ThemeContext.Provider value={{ theme, toggleTheme }}>
          
          <div style={{ 
              background: theme === 'light' ? '#ffffff' : '#222222', 
              color: theme === 'light' ? '#000000' : '#ffffff', 
              padding: '20px'
          }}>
              <h2>Task 4: Theme Context Component</h2>
              
              <ThemeDisplay />
              <ThemeToggle />
          </div>

      </ThemeContext.Provider>
      */}
      {/* <ReducerCounter /> */}
      <AutoFocusForm />
    </div>
  ); 
}

export default App;