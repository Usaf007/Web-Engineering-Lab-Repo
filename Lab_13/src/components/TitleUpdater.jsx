import { useState, useEffect } from 'react';

const TitleUpdater = () => {
    // 1. The Memory (State)
    const [count, setCount] = useState(0);

    // 2. The Personal Assistant (Side Effect)
    // This function runs AFTER React draws the screen.
    useEffect(() => {
        // This targets the actual browser tab, outside of our React HTML
        document.title = `Clicked ${count} times`;
        
    }, [count]); // <-- The Dependency Array: "Only run this if 'count' changes!"

    return (
        <div>
            <h2>Task 3: Title Updater Component</h2>
            
            <p>You clicked {count} times</p>
            
            <button onClick={() => setCount(count + 1)}>
                Update Title
            </button>
        </div>
    );
};

export default TitleUpdater;