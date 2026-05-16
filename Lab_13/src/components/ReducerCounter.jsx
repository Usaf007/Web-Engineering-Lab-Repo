import { useReducer } from 'react';

// 1. The Reducer (The Brain)
// It takes the current state and an action, then returns the new state.
const counterReducer = (state, action) => {
    switch (action.type) {
        case 'INCREMENT':
            return { count: state.count + 1 };
        case 'DECREMENT':
            return { count: state.count - 1 };
        case 'RESET':
            return { count: 0 };
        default:
            return state;
    }
};

const ReducerCounter = () => {
    // 2. Initializing useReducer
    // 'state' is the current data, 'dispatch' is the function to send actions
    const [state, dispatch] = useReducer(counterReducer, { count: 0 });

    return (
        <div>
            <h2>Task 5: useReducer Counter</h2>
            <h1>{state.count}</h1>

            {/* 3. Dispatching Actions (Sending instructions to the brain) */}
            <button onClick={() => dispatch({ type: 'INCREMENT' })}>
                Increment
            </button>
            
            <button onClick={() => dispatch({ type: 'DECREMENT' })}>
                Decrement
            </button>
            
            <button onClick={() => dispatch({ type: 'RESET' })}>
                Reset
            </button>
        </div>
    );
};

export default ReducerCounter;