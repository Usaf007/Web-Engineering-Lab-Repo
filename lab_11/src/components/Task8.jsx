// 1. Importing the external stylesheet directly into the component
import '../Task8.css';

const Task8 = () => {
  return (
    // 2. Applying the CSS using className instead of class
    <div className="styled-box">
      <h3 className="highlight">Task 8: External Stylesheets</h3>
      <p className="styled-text">
        This component is styled entirely by an external CSS file!
      </p>
    </div>
  );
};

export default Task8;