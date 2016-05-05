# IoT-Based-Smart-Door


AIM: “IOT Based Smart Door” aims at alerting the user whenever there is person in front of the door and the user is not present near the vicinity. And user can give out the appropriate  messages through the speakers at the door.
Key Words:- OpenCV, Android Application, Raspberry Pi, google compute engine

1.INTRODUCTION

Internet Of Things (IOT) :- 
      The IOT aims to unify everything in our world under a common infrastructure, giving us not only control of things around us, but also keeping us informed of the state of the things. In Light of this, present study addresses IOT concepts through systematic review of scholarly research papers, corporate white papers, professional discussions with experts and online databases. Moreover this research article focuses on definitions, geneses, basic requirements, characteristics and aliases of Internet of Things. The main objective of this paper is to provide an overview of Internet of Things, architectures, and vital technologies and their usages in our daily life. However, this manuscript will give good comprehension for the new researchers, who want to do research in this field of Internet of Things (Technological GOD) and facilitate knowledge accumulation in efficiently.

Android :-
       Initially developed by Android, Inc., which Google backed financially and later bought in 2005. Android was unveiled in 2007 along with the founding of the open Alliance: a consortium for hardware, software and telecommunication companies devoted to advancing open standards for mobile devices.
       Android is open source and Google releases the code under the Apache License. This open-source code and permissive licensing allows the software to be freely modified and distributed by device manufacturers. Additionally, Android has a large community of developers writing applications ("apps") that extend the functionality of devices, written primarily in a customized version of the Java programming language.

Android controlled home Automation:-
     As per our survey, there exist many systems that can control home appliances using android based phones/tablets. Each system has its unique features. Currently certain companies are officially registered and are working to provide better home automation system features. Following models describes the work being performed by others. N. Sriskanthan explained the model for home automation using Bluetooth via PC. But unfortunately the system lacks to support mobile technology. MuhammadIzharRamli designed a prototype electrical device control system using Web. They also set the server with auto restart if the server condition is
Currently down


2.  OBJECTIVES OF PROJECT

IOT Based Smart Door must be able to capture the image of the person near the door.
The snapshot is then stored on the cloud.
 An email and SMS notification must be sent  to the user.
User can then look the snapshot in the associated android application with him/her.
User must be able to select the appropriate message through that app which is delivered at the door by speakers. 

3.  METHODOLOGY
On the Raspberry Pi and Cloud
Step1:- Run the image processing algorithm on RPI to detect the face.
Step2:- Capture the image through Raspberry Pi Camera and store it on       the cloud.
Step3:- Send an email and SMS notification to the registered user from the cloud. 
Step4:- Wait for the next event to occur and repeat the same.

On the Mobile Application 	
Step1:- Display the latest activity at the door step i.e., latest image from the cloud.
Step2:- Provide the option for notifying the person at the door with the appropriate message or preloaded message.

We use the following components in our system:
Raspberry Pi: Raspberry Pi is a processing unit. It acts as CPU. 
Camera: Camera is connected to Raspberry Pi to detect the face and capture the image.
Micro SD card: To store the code and to install software on pi we use Micro SD card. It acts as hard disk. 
Speakers: Speakers are connected to Raspberry Pi which plays the message at the door. 
Ultrasonic Sensor: Sensor is connected to Raspberry Pi to provide distance measurement between human and the device.

5.  Scope for future work
System eliminates the work of office boy.
Complete system is affordable.
Occupies less space.
Opening and closing the door by mobile.
Text to speech conversion.  



6.   REFERENCES

[1] Richardson, M. Wallace, S. 2014 Getting Started with Raspberry Pi, 2nd.   Ed. Maker Media Inc. 
[2] Upton, E. Halfacree, G. 2014 Raspberry Pi User Guide, 3rd. Ed. Wiley. 
[3] Smart Surveillance System using Thing Speak and Raspberry Pi -R.Chandana, Dr.S.A.K.Jilani, Mr.S.Javeed Hussain. 
[4] Yang, J.-C.; Lai, C.-L.; Sheu, H.-T.; Chen, J.-J. An Intelligent Automated Door Control System Based on a Smart Camera. Sensors 2013, 13, 5923-5936. 
[5] A microcontroller based security door using smart card http://www.edustores.net/material-1059.shtml 
