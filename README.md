<h1><img src="https://github.com/SandeepKundalwal/Post-Graduate-Project/assets/61798659/0fb6e767-b7d9-4d14-9692-a5dac7e51e96" width="45px"> &nbsp;Post Graduate Project @IIT, Mandi</h1>

<h2>Phishing Game Website for Post Graduate Project @IITMandi</h2>

This repo contains the code for the Phishing Game Website made as part of my M.Tech Thesis titled <b>Investigating User Behaviour Towards Phishing Mail Using Eye Gaze Movement</b> at IIT Mandi.The phishing emails are either human-crafted or GPT3-crafted. The study consists of a user interacting with 40 emails (20 genuine, 20 phishing) in 3 rounds (10 emails in 1<sup>st</sup> round, 20 in 2<sup>nd</sup> round and 10 in 3<sup>rd</sup> round). A feedback will be provided after 1<sup>st</sup> round with the total score. In 2<sup>nd</sup> round, feedback will be provided after every email whether the user has identified the email correctly. After the 3<sup>rd</sup> round, an overall score will be provided. Also, 4 questions were asked to the user during their interaction with every email (see user interface for the of questions). Users' Eye Gaze Coordinates are continously being saved using research-grade hardware called **Tobii EyeX Controller**. 

### User Interface:
![2](https://github.com/SandeepKundalwal/Phishing-Microworld-PGP/assets/61798659/b0c4380c-8f93-4f6e-97b2-25439b3ba8da)

## Important Results Found:
- **Human-Crafted Emails phished people more than GPT3-Crafted emails.**
![image](https://github.com/SandeepKundalwal/Phishing-Microworld-PGP/assets/61798659/3d72f16e-5c6a-4d85-9f62-f71a3287313e)

- **Average Gaze Fixation Count of all the participants in human generated phishing emails where significantly higher that GPT-3 crafted which shows that users’ take more time to categorize whether the email is genuine or phishing when the mails are human crafted. Higher gaze point counts indicates increased cognitive effort, possibly due to uncertainty or deeper processing of the email content when the email is crafted by human.**  
![image](https://github.com/SandeepKundalwal/Phishing-Microworld-PGP/assets/61798659/d49f6c5b-5166-4e8d-8d4e-9569b932df0d)

- **Two-Factor Anova Analysis:** was done to analyze the effects of two independent categorical variables on a dependent variable.
  - Independent Factors:
    - Generation Type:
      - Human-Crafted
      - GPT3-Crafted
    - Type of Email:
      - Genuine
      - Phishing
  - Dependent Variable: Proportion of gaze points within each category (sender email, date, subject, body, others) for each combination of generation type (Human vs GPT-3) and type of email (Genuine vs Phishing).

Two Factor Anova between Factor A and Factor B reveals that there is a there is a statistically significant difference in the proportions of gaze points between Human and GPT-3 generated emails as the p-value is less than 0.05
![image](https://github.com/SandeepKundalwal/Phishing-Microworld-PGP/assets/61798659/ae24a7f1-053c-4b2c-8298-36b21e81dc57)

Two Factor Anova proportion of gaze points within each category (sender email, date, subject, body, others) for each combination of generation type (Human vs GPT-3) and type of email (Genuine vs Phishing).
![image](https://github.com/SandeepKundalwal/Phishing-Microworld-PGP/assets/61798659/173774d3-138f-4337-9a2f-90cad7024dbb)

From this we can infer that,
  - The analysis shows that the amount of gaze fixations in human-crafted email for both Genuine/Phishing emails are larger than those for GPT3-crafted emails, this seems to confirm our assumption as per fig.[2] that human-crafted emails were more effective in phishing people as compared to GPT3-crafted emails (as human-crafted emails have more gaze-fixations counts, meaning higher cognitive loads).
  - As per Anova-Analysis, the date, body and Q&A section of the emails have p > 0.05, which suggests that there is a statistically significant difference in the proportions of gaze points between Human and GPT-3 generated emails when considering these category, suggesting that the technique of crafting email (Human or GPT3 crafted) significantly influences how users focus their gaze points when looking at these section of the emails.
  


