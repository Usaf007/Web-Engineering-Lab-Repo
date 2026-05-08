const FruitList = (props) => {
  return (
    <div>
      <h3>Fresh Fruits Inventory</h3>
      
      <ul>
        {props.items.map((fruit, index) => (
          <li key={index}>
            {fruit}
          </li>
        ))}
      </ul>
      
    </div>
  );
};

export default FruitList;