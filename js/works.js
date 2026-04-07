let projectSections = document.getElementById("section-projects");

const projects = [
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Expense Tracker (In Progress)",
    repoLink: "https://github.com/kazisrepo/expensetracker/wiki",
    technologyUsed:
      "C# .NET, React, SQL Server, Azure Cloud, GitHub Actions, CI/CD, Onion Architecture",
    responsibilities:
      "Developed an expense tracking application for drivers, handling the full software development lifecycle including requirements gathering, system design, development, testing, and CI/CD automation.",
    projectDescription:
      "An application designed to efficiently track and manage expenses for drivers.",
    projectLink: "#ComingSoon",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Logistics Management Back Office",
    repoLink: "#N/A",
    technologyUsed: "C# .NET, SQL Server, React, Monolithic Architecture",
    responsibilities:
      "Independently developed and maintained the application across all stages of the product lifecycle, from requirements analysis and implementation to deployment and ongoing support.",
    projectDescription:
      "A web-based solution designed to streamline back-office operations, including order creation, delivery tracking, invoicing, payment collection, and reporting.",
    projectLink: "#N/A",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Property Management System",
    repoLink: "#N/A",
    technologyUsed: "C# .NET, SQL Server, Angular, Microservices Architecture",
    responsibilities:
      "Contributed to all phases of development, including requirements analysis, feature implementation, deployment, and ongoing maintenance.",
    projectDescription:
      "A web-based application for property listings, request submissions, and an internal tenant portal.",
    projectLink: "#N/A",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Online Learning Platform",
    repoLink: "#N/A",
    technologyUsed:
      "C# .NET, SQL Server, jQuery, HTML, CSS, Monolithic MVC Architecture",
    responsibilities:
      "Resolved existing defects and supported the production release of the application.",
    projectDescription:
      "A web-based marketplace platform where learners can connect with subject matter experts for individual or group learning sessions.",
    projectLink: "#N/A",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Bug Smasher (Fun Project)",
    repoLink: "https://github.com/kazisrepo/portfolio",
    technologyUsed: "HTML, CSS, JavaScript",
    responsibilities:
      "Developed an interactive JavaScript-based game as part of an academic assignment.",
    projectDescription:
      "A bug-smasher game in which the target accelerates after each hit, increasing difficulty progressively.",
    projectLink: "/fun-projects/bug-smasher/",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Etch A Sketch (Fun Project)",
    repoLink: "https://github.com/kazisrepo/portfolio",
    technologyUsed: "HTML, CSS, JavaScript",
    responsibilities:
      "Built an interactive drawing application using JavaScript as part of an academic assignment.",
    projectDescription:
      "A grid-based drawing tool that allows users to draw using single or randomly generated colors.",
    projectLink: "/fun-projects/etch-a-sketch/",
  },
  {
    imageSrc: "assets/no-image.png",
    projectTitle: "Rock Paper Scissors (Fun Project)",
    repoLink: "https://github.com/kazisrepo/portfolio",
    technologyUsed: "HTML, JavaScript",
    responsibilities:
      "Implemented a simple interactive game using JavaScript as part of an academic assignment.",
    projectDescription:
      "A classic rock-paper-scissors game featuring basic user interaction.",
    projectLink: "/fun-projects/rock-scissor-paper/",
  },
];

const createProjectRow = (
  imageSrc,
  projectTitle,
  repoLink,
  technologyUsed,
  responsibilities,
  projectDescription,
  projectLink,
  index,
) => {
  const row = document.createElement("div");
  row.classList.add("mb-3", "row");
  row.classList.add(index % 2 === 0 ? "project" : "project-alternate");

  const col1 = document.createElement("div");
  col1.classList.add("col-md-2");

  const img = document.createElement("img");
  img.src = imageSrc;
  img.classList.add("project-image");

  const imgLink = document.createElement("a");
  imgLink.href = projectLink;
  imgLink.appendChild(img);

  col1.appendChild(imgLink);
  row.appendChild(col1);

  const col2 = document.createElement("div");
  col2.classList.add("col-md-10");

  const paraDiv = document.createElement("div");

  const title = document.createElement("h5");
  title.style.padding = "10px 0";
  title.innerHTML = projectTitle;

  const titleLink = document.createElement("a");
  titleLink.href = projectLink;
  titleLink.appendChild(title);
  paraDiv.appendChild(titleLink);

  const repoPara = document.createElement("p");
  repoPara.innerHTML = `<strong>Repo:</strong> ${repoLink}`;
  paraDiv.appendChild(repoPara);

  const techPara = document.createElement("p");
  techPara.innerHTML = `<strong>Technology Used:</strong> ${technologyUsed}`;
  paraDiv.appendChild(techPara);

  const respPara = document.createElement("p");
  respPara.innerHTML = `<strong>Responsibilities:</strong> ${responsibilities}`;
  paraDiv.appendChild(respPara);

  const descPara = document.createElement("p");
  descPara.innerHTML = `<strong>Description:</strong> ${projectDescription}`;
  paraDiv.appendChild(descPara);

  col2.appendChild(paraDiv);
  row.appendChild(col2);

  return row;
};

projects.forEach((project, index) => {
  const row = createProjectRow(
    project.imageSrc,
    project.projectTitle,
    project.repoLink,
    project.technologyUsed,
    project.responsibilities,
    project.projectDescription,
    project.projectLink,
    index,
  );
  projectSections.appendChild(row);
});
