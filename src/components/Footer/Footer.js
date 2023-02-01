import React from 'react';
import './Footer.css'
import banglaText from '../../../src/assets/IPDC_Logo-removebg-preview.png'
import logo from '../../../src/assets/logo.png'
import { Col, Container, Row } from 'react-bootstrap';
import location from '../../../src/assets/icons8-location.svg'
import tele from '../../../src/assets/icons8-phone.svg'
import fb from '../../../src/assets/icons8-facebook.svg'
import yt from '../../../src/assets/icons8-youtube.svg'
import li from '../../../src/assets/icons8-linkedin---in-logo-used-for-professional-networking,.svg'
import ins from '../../../src/assets/icons8-instagram.svg'


const Footer = () => {
    return (
        <div className='footer'>
            <br />
            <br />
            <br />
            <Container>
                <div className='d-flex justify-content-between align-items-center'>
                    <div>
                        <img src={logo} width={120} alt="" />
                    </div>
                    <div>
                        <img src={banglaText} width={120} height={40} alt="" />
                    </div>
                </div>
                <Row>
                    <Col>
                        <h6 className='text-start text-secondary ms-2'>We are happy to help you find the right solutions for all your financial needs. To know more, call us or visit any of our branches throughout the country</h6>
                        <br />
                        <br />

                        <Row>
                            <div className='d-flex align-items-center'>
                                <div className='d-flex align-items-center me-4'>
                                    <div>
                                        <img className='me-3' src={location} alt="" />
                                    </div>
                                    <div>
                                        <h5 className='pinktext text-start'>Gulshan Dhaka</h5>
                                        <h6 className='pinktext text-start'>Hosna Centre, Gulshan Avenue</h6>
                                    </div>
                                </div>
                                <div className='d-flex align-items-center'>
                                    <div>
                                        <img className='mb-1 me-3' src={tele} height={35} alt="" />
                                    </div>
                                    <div>
                                        <h5 className='pinktext text-start'>16519</h5>
                                        <h6 className='pinktext text-start'>Give us a call</h6>
                                    </div>
                                </div>
                            </div>
                        </Row>
                    </Col>

                    <Col className='ms-5'>
                        <Row>
                            <Col lg={5}>
                                <div className='ms-5 text-secondary'>
                                    <h6 className='text-start'>About Us</h6>
                                    <h6 className='text-start'>Media</h6>
                                    <h6 className='text-start'>Career</h6>
                                    <h6 className='text-start'>Signature Platform</h6>
                                    <h6 className='text-start'>Awards</h6>
                                    <h6 className='text-start'>Branches</h6>
                                    <h6 className='text-start'>Loans</h6>
                                    <h6 className='text-start'>Deposit</h6>
                                    <h6 className='text-start'>Ongoing Campaigns</h6>
                                    <h6 className='text-start'>Contact Us</h6>
                                </div>
                            </Col>
                            <Col>
                                <div className='text-secondary'>
                                    <h6 className='text-start'>IPDC calender</h6>
                                    <h6 className='text-start'>IPDC 40</h6>
                                    <h6 className='text-start'>Environmental and Social Risk Management</h6>
                                    <h6 className='text-start'>Government Securities Investment Window</h6>
                                    <h6 className='text-start'>NIS</h6>
                                    <h6 className='text-start'>Branches</h6>
                                </div>
                            </Col>
                        </Row>
                    </Col>
                </Row>
                <br />
                <br />

                <Row className='text-secondary'>
                    <hr />
                    <Col>
                        <h6 className='copyright'> © IPDC Finance Limited 2022</h6>
                    </Col>
                    <Col lg={7}>
                        <Row>
                            <Col><h6 className='midfooter'>Terms of Use</h6></Col>
                            <Col><h6 className='midfooter'>AML and CFT Policy</h6></Col>
                            <Col><h6 className='midfooter'>Sitemap</h6></Col>
                            <Col><h6 className='midfooter'>Complaint Cell</h6></Col>
                            <Col><h6 className='midfooter'>Information Booth</h6></Col>
                            <Col><h6 className='midfooter'>Disclosure on CAMD</h6></Col>

                        </Row>
                        <Row>
                            <Col><h6 className='midfooter'>Schedule on fees & charge</h6></Col>

                        </Row>
                    </Col>

                    <Col className=''>

                        <img className='me-2' src={fb} height={25} alt="" />
                        <img className='mx-2' src={yt} alt="" />
                        <img className='mx-2' src={li} height={18} alt="" />
                        <img className='ms-2' src={ins} alt="" />

                    </Col>
                </Row>
                <br className='mb-1' />
            </Container>
        </div>
    );
};

export default Footer;