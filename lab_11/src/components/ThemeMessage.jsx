const ThemeMessage = (props) => {
  return (
    <div style={{
      marginTop: '15px', 
      padding: '15px', 
      borderRadius: '8px',
      // Conditionally rendering CSS styles using ternaries!
      backgroundColor: props.isDarkMode ? '#0a0a0a' : '#f8f9fa',
      color: props.isDarkMode ? '#00ffcc' : '#333333',
      border: props.isDarkMode ? '1px solid #333' : '1px solid #ccc'
    }}>
      <h3>UI Theme Status</h3>
      
      {/* Conditionally rendering text using a ternary! */}
      <p>
        {props.isDarkMode 
          ? "🌙 Dark mode enabled. The cinematic visual style and glassmorphism effects are fully active." 
          : "☀️ Light mode enabled. Please switch to dark mode for the best aesthetic experience."}
      </p>
    </div>
  );
};

export default ThemeMessage;