import { useState } from 'react';

const ToggleText = () => {
    // 1. The Switch Setup
    // 'isVisible' is the memory (starts as false / OFF)
    // 'setIsVisible' is the remote control
    const [isVisible, setIsVisible] = useState(false);

    return (
        <div>
            <h2>Task 2: Toggle Component</h2>
            
            {/* 2. The Event Listener */}
            {/* The "!" tells React to set the state to the OPPOSITE of whatever it currently is */}
            <button onClick={() => setIsVisible(!isVisible)}>
                Toggle
            </button>

            {/* 3. Conditional Rendering */}
            {/* If 'isVisible' is true, render the paragraph. If false, render nothing. */}
            {isVisible && (
                <p>This is the paragraph of text!<br></br>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempore temporibus consectetur cum eaque recusandae, rerum quas at quo dolor vitae soluta ducimus culpa eveniet commodi veniam? Iste, assumenda sint!
                </p>
            )}
        </div>
    );
};

export default ToggleText;