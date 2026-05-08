// The component receives "props" as an object containing all passed attributes
const MyName = (props) => {
  return (
    <div>
      <h1>My name is {props.name}!</h1>
      <h3>This is a simple functional component that recieves the props in React.</h3>
    </div>
  );
};

export default MyName;