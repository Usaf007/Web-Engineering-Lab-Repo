import { useState } from 'react';

const Counter = () => {
    // 1. The Scoreboard Setup
    // 'count' is the memory (starts at 0)
    // 'setCount' is the remote control function used to update the memory
    const [count, setCount] = useState(0);

    return (
        <div >
            <h2>Task 1: Counter Component</h2>
            
            {/* 2. Displaying the current memory */}
            <h1>{count}</h1>
            
            {/* 3. The Buttons (Event Listeners) triggering the remote control */}
            <button 
                onClick={() => setCount(count + 1)}>
                Increment
            </button>
            
            <button 
                onClick={() => setCount(count - 1)}>
                Decrement
            </button>
        </div>
    );
};

export default Counter;