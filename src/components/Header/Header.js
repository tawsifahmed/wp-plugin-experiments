import React from 'react';
import Button from 'react-bootstrap/Button';
import Container from 'react-bootstrap/Container';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import banner from '../../assets/banner.jpeg'
import logo from '../../assets/logo.png'
import downarrow from '../../assets/icons8-down.svg'
import './Header.css'
import searchBar from '../../assets/icons8-find.svg';

const Header = () => {
    return (
        <div className='header'>
            <div className='banner' style={{ backgroundImage: `url(${banner})` }}>
                <Navbar className='mx-5' bg="none" expand="lg">
                    <Container fluid>
                        <Navbar.Brand href="#"><img className='logo ms-5' src={logo} width="120" alt="" /></Navbar.Brand>
                        <Navbar.Toggle aria-controls="navbarScroll" />
                        <Navbar.Collapse id="navbarScroll">
                            <Nav
                                className="ms-5 me-auto my-2 my-lg-0"
                                style={{ maxHeight: '100px' }}
                                navbarScroll
                            >
                                <Nav.Link className='text-white fw-bolder me-5' href="#action1">DEPOSIT</Nav.Link>
                                <Nav.Link className='text-white fw-bolder me-5' href="#action2">LOANS <span><img src={downarrow} alt="" /></span></Nav.Link>
                                <Nav.Link className='text-white fw-bolder me-5' href="#action2">ONGOING CAMPAIGNS</Nav.Link>

                                <Nav.Link className='text-white fw-bolder' href="#">
                                    ABOUT US <span><img src={downarrow} alt="" /></span>
                                </Nav.Link>
                            </Nav>
                            <Form className="d-flex">
                                <img src={searchBar} className='me-5' alt="" />
                                <button className="ms-5 px-3 fw-bolder bbtt">My Account</button>

                            </Form>
                            <p id='language' className='text-secondary'>বাংলা</p>
                        </Navbar.Collapse>
                    </Container>
                </Navbar>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br /><br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <div className='blur-box'>

                    <div className='text-white blurry'>
                        <h1 className='text-white fw-bolder bannertext'>IPDC Auto Loan</h1>

                        <h5 className='bannertext'>An Auto Loan that lets ou own your adventure by getting that car  of your dreams. <br />
                            Because having a car of your own is like holding the steering of your life.</h5>
                        <br />

                    </div>

                </div>
            </div>
            <br />
            <br />
            <br />
            <br />
        </div >
    );
};

export default Header;