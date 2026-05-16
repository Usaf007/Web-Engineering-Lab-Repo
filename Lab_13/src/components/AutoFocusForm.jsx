import { useRef, useEffect } from 'react';

const AutoFocusForm = () => {
    // 1. Create the "Laser Pointer" (The Ref)
    // We start it as null because the input doesn't exist yet
    const inputRef = useRef(null);

    // 2. The Instruction
    useEffect(() => {
        // Once the page draws, "point" the laser and trigger focus
        // .current is the actual physical text box
        inputRef.current.focus();
    }, []); // Empty array means "Run once when the page loads"

    return (
        <div>
            <h2>Task 6: useRef Auto-Focus Form</h2>
            <form>
                <label>Enter your name: </label>
                {/* 3. Attach the laser pointer to this specific element */}
                <input 
                    ref={inputRef} 
                    type="text" 
                    placeholder="I focused automatically!" 
                />
                <button type="submit">Submit</button>
            </form>
        </div>
    );
};

export default AutoFocusForm;