import React from 'react';
import { Col, Container, Row } from 'react-bootstrap';
import './Purpose.css'
import document from '../../../assets/icons8-document.svg'
import arrow from '../../../assets/icons8-downgreen.svg'
import downloadlogo from '../../../assets/icons8-downloading-updates.svg'

const Purpose = () => {
    return (
        <div className='purposeSection'>
            <br />
            <br />
            <br />
            <h1 className='fw-bolder'>
                Purpose
            </h1>
            <br />
            <br />
            <br />
            <Container>
                <Row className='gap-3'>
                    <Col className='d-flex justify-content-start align-items-center purposeBoxes'>
                        <img className='ms-3' src="https://img.icons8.com/color/27/null/verified-account--v1.png" alt="" />
                        <p className='mt-3 ms-2 fw-bolder'>Brand New Vehicles</p>
                    </Col>
                    <Col className='d-flex justify-content-start align-items-center purposeBoxes'>
                        <img className='ms-3' src="https://img.icons8.com/color/27/null/verified-account--v1.png" alt="" />
                        <p className='mt-3 ms-2 fw-bolder'>Reconditioned Vehicles</p>
                    </Col>
                    <Col className='d-flex justify-content-start align-items-center purposeBoxes'>
                        <img className='ms-3' src="https://img.icons8.com/color/27/null/verified-account--v1.png" alt="" />
                        <p className='mt-3 ms-2 fw-bolder'>Used Vehicles</p>
                    </Col>
                </Row>
            </Container>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <h1 className='fw-bolder text-start crit'>Eligible Criteria</h1>
            <br />
            <div className='d-flex align-items-center crit'>
                <img className='ms-3 mb-2' src="https://img.icons8.com/color/20/null/verified-account--v1.pnghttps://img.icons8.com/color/20/null/verified-account--v1.png" alt="" />
                <p className='mt-1 ms-2 fw-bolder'>Salaried/Self-Employed/ a Business Owner/Landlord</p>
            </div>
            <div className='d-flex align-items-center crit'>
                <img className='ms-3 mb-2' src="https://img.icons8.com/color/20/null/verified-account--v1.pnghttps://img.icons8.com/color/20/null/verified-account--v1.png" alt="" />
                <p className='mt-1 ms-2 fw-bolder'>Minimum 21 years old(if income is to be considered) and maximum 65 years or retired(whichever is lower)</p>
            </div>
            <div className='d-flex align-items-center crit'>
                <img className='ms-3 mb-2' src="https://img.icons8.com/color/20/null/verified-account--v1.pnghttps://img.icons8.com/color/20/null/verified-account--v1.png" alt="" />
                <p className='mt-1 ms-2 fw-bolder'>Verifiable minimum monthly income is BDT. 30,000/-</p>
            </div>
            <div className='d-flex align-items-center crit'>
                <img className='ms-3 mb-2' src="https://img.icons8.com/color/20/null/verified-account--v1.pnghttps://img.icons8.com/color/20/null/verified-account--v1.png" alt="" />
                <p className='mt-1 ms-2 fw-bolder'>Minimum working experience of 1 year</p>
            </div>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <h1 className='fw-bolder'>Long Term and Amount</h1>
            <br />
            <br />
            <br />
            <Container>
                <Row className='gap-3 allLongBoxes'>
                    <Col className='longTermBoxes shadow-lg'>
                        <br />
                        <img src="https://img.icons8.com/fluency-systems-regular/48/null/stack-of-coins.png" alt="" />
                        <h4>Amount</h4>
                        <p>Any amount supported by <br /> income</p>
                    </Col>
                    <Col className='longTermBoxes shadow-lg'>

                        <img className='mt-3' src="https://img.icons8.com/ios/50/null/rules-book.png" alt="" />
                        <h4>Term</h4>
                        <p>Up to 72 months (new), and 60 <br /> months (reconditioned and <br /> used)</p>
                    </Col>
                    <Col className='longTermBoxes shadow-lg'>

                        <img className='mt-3' src="https://img.icons8.com/pastel-glyph/48/null/location--v3.png" alt="" />
                        <h4>Coverage</h4>
                        <p>IPDC offers auto loan up to <br /> 100% of the vehicle value</p>
                    </Col>
                </Row>
            </Container>
            <br />
            <br />
            <br />
            <br />
            <div className='bg-white'>
                <br />
                <br />
                <br />
                <h1 className='fw-bolder'>Documents Required</h1>
                <br />
                <br />
                <br />
                <Container>
                    <Row className='firstR'>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Application form (Filled and signed)</p>
                        </Col>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Copy of NID or Passport (applicant's and guarantors)</p>
                        </Col>
                    </Row>
                    <Row>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Photographs (applicant's and guarantors)</p>
                        </Col>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Utility bill copy</p>
                        </Col>
                    </Row>
                    <Row>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Salary/income slips</p>
                        </Col>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Bank Statements</p>
                        </Col>
                    </Row>
                    <Row>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Other income related documents</p>
                        </Col>
                        <Col className='d-flex justify-content-start align-items-center docfiles'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>E-TIN Copy</p>
                        </Col>
                    </Row>
                    <Row>
                        <Col className='d-flex justify-content-start align-items-center docfiles lastDoc'>
                            <img src={document} alt="" />
                            <p className='ms-2 mt-3'>Quotation from a vendor/car dealer</p>
                        </Col>

                    </Row>
                </Container>
                <br />
                <br />
                <br />
                <br />
                <br />
                <div>
                    <h1 className='fw-bolder'>FAQ</h1>
                    <br />
                    <br />
                    <br />
                    <Container>
                        <Row>
                            <Col className='d-flex justify-content-between align-items-center rounded shadow p-4'>
                                <div>
                                    <h5 className='text-start'>Whats the tenure  of this loan?</h5>
                                    <h6 className='text-start text-secondary'>The loan tenure is a maximum of 6 years</h6>
                                </div>
                                <div>
                                    <img className='arrow-up' src={arrow} alt="" />
                                </div>
                            </Col>
                        </Row>
                        <br />
                        <Row>
                            <Col className='d-flex justify-content-between align-items-center rounded shadow p-4'>
                                <div>
                                    <h5 className='text-start'>Which vendors are available as part of IPDC?</h5>

                                </div>
                                <div>
                                    <img src={arrow} alt="" />
                                </div>
                            </Col>
                        </Row>
                        <br />
                        <Row>
                            <Col className='d-flex justify-content-between align-items-center rounded shadow p-4'>
                                <div>
                                    <h5 className='text-start'>What is the maximum loan amount?</h5>

                                </div>
                                <div>
                                    <img src={arrow} alt="" />
                                </div>
                            </Col>
                        </Row>
                        <br />
                        <Row>
                            <Col className='d-flex justify-content-between align-items-center rounded shadow p-4'>
                                <div>
                                    <h5 className='text-start'>What are the criteria for applying for IPDC Auto Loan?</h5>

                                </div>
                                <div>
                                    <img src={arrow} alt="" />
                                </div>
                            </Col>
                        </Row>
                    </Container>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <Container>
                        <div className='d-flex justify-content-end'>
                            <div className='hide'>
                                p
                            </div>
                            <div className='d-flex align-items-center downbtn'>
                                <p className='download-btn'>DOWNLOAD NOW</p>
                                <img className='mb-3' src={downloadlogo} alt="" />
                            </div>
                        </div>
                    </Container>
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                </div>
            </div>

        </div>
    );
};

export default Purpose;