import React from 'react';
import { Col, Container, Row } from 'react-bootstrap';
import './Offer.css'

import processingpng from '../../../assets/icons8-processing-time-48.png'

const Offer = () => {
    return (
        <div>
            <h1 className='fw-bolder'>What We Offer</h1>
            <p id='para' className='text-secondary mt-3'>Fastest Auto Loan to buy that dream car and move unbound</p>
            <br />
            <br />
            <br />
            <Container>
                <Row className='gap-3'>
                    <Col className='d-flex justify-content-start align-items-center offerBoxes'>
                        <img className='mb-3 ms-3 me-2' src="https://img.icons8.com/external-sbts2018-mixed-sbts2018/58/null/external-06-interest-rate-finance-basic-2-sbts2018-mixed-sbts2018.png" alt="" />
                        <h4>Attractive Interest Rates</h4>
                    </Col>
                    <Col className='d-flex justify-content-start align-items-center offerBoxes'>
                        <img className='mb-2 ms-3 me-2' src={processingpng} alt="" />
                        <h4>Fastest Processing Time</h4>
                    </Col>
                    <Col className='d-flex justify-content-start align-items-center offerBoxes'>
                        <img className='mb-2 ms-3 me-2' src="https://img.icons8.com/ios/58/null/car-sale.png" alt="" />
                        <h4>Financing for New/Used Cars</h4>
                    </Col>
                </Row>

                <Row className='gap-3 mt-3'>
                    <Col className='d-flex justify-content-start align-items-center offerBoxes'>
                        <img className='mb-2 ms-3 me-2' src="https://img.icons8.com/ios/50/null/full-version.png" alt="" />
                        <h4>Upto Full Value of the Vehicle</h4>
                    </Col>
                    <Col className='d-flex justify-content-start align-items-center offerBoxes'>
                        <img className='mb-2 ms-3 me-2' src="https://img.icons8.com/ios/50/null/card-in-use.png" alt="" />
                        <h4>PrePayment Flexibility</h4>
                    </Col>
                    <Col className='d-flex justify-content-start align-items-center offerBoxes'>
                        <img className='mb-2 ms-3 me-2' src="https://img.icons8.com/dotty/58/null/receive-change.png" alt="" />
                        <h4>No Hidden Charges</h4>
                    </Col>
                </Row>
            </Container>
            <br />
            <br />
            <br />
        </div>
    );
};

export default Offer;