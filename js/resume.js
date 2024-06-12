//#region populate skill-section
const createSkillBar = (skillName, skillScore) => {
  // Create the skill-text div
  const skillTextDiv = document.createElement("div");
  skillTextDiv.className = "skill-text";

  // Create and append the skill name label
  const skillNameLabel = document.createElement("label");
  skillNameLabel.id = "skill-name";
  skillNameLabel.textContent = skillName;
  skillTextDiv.appendChild(skillNameLabel);

  // Create and append the skill score label
  const skillScoreLabel = document.createElement("label");
  skillScoreLabel.id = "skill-score";
  //skillScoreLabel.textContent = skillScore + "%";
  skillTextDiv.appendChild(skillScoreLabel);

  // Create the outer-line div
  const outerLineDiv = document.createElement("div");
  outerLineDiv.className = "outer-line";

  // Create the inner-bar div
  const innerBarDiv = document.createElement("div");
  innerBarDiv.className = "inner-bar";
  innerBarDiv.id = "inner-bar";
  innerBarDiv.style.width = skillScore + "%";

  // Append the inner-bar div to the outer-line div
  outerLineDiv.appendChild(innerBarDiv);

  // Create the skill-bar div and append everything
  const skillBarDiv = document.createElement("div");
  skillBarDiv.className = "skill-bar";
  skillBarDiv.appendChild(skillTextDiv);
  skillBarDiv.appendChild(outerLineDiv);

  return skillBarDiv;
};
const populateSkillSection = () => {
  const skillSection = document.getElementById("skill-section");
  const ul = document.createElement("ul");

  const skills = [
    { name: "C#", score: 95 },
    { name: "Java", score: 75 },
    { name: "JavaScript", score: 90 },
    { name: "React", score: 70 },
    { name: "SQL", score: 90 },
    { name: "Python", score: 60 },
  ];

  skills.forEach((skill) => {
    let li = document.createElement("li");
    li.appendChild(createSkillBar(skill.name, skill.score));
    ul.appendChild(li);
  });

  skillSection.appendChild(ul);
};
document.addEventListener("DOMContentLoaded", populateSkillSection);
//#endregion
