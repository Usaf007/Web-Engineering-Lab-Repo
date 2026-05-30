import { useParams } from 'react-router-dom';

const Product = () => {
    // Extracts the dynamic parameter from the URL
    const { productId } = useParams();

    return (
        <div>
            <h1>Product Details</h1>
            <p>You are viewing the details for Product ID: <strong>{productId}</strong></p>
        </div>
    );
};
export default Product;