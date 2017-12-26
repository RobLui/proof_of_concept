- Wat mij opviel tijdens deze simpele code refactoring uitprobering..

- In js-file-2 loopt het mis bij het samenvoegen van de functies als ik in 1 van de functies geen "var" gebruik!

  * Verwacht resultaat van SumOfAll() = 18, verkregen = 2 bij var niet te gebruiken bij bv: var e , f..

- Dit loopt anders bij js-file-2 waarbij het niet uitmaakt of er var of niet instaat

  * Verwacht resultaat van SumOfAll() = 18, wat wel het resultaat is dat ik verwachtte!

- Komt door gebruik van this. (ik laat deze dus even buiten de tests die ik plan te doen omdat ik niet weet welke resultaten ik hierdoor kan terug krijgen op onverwachte momenten, kan wel later bijgevoegd worden)

- Dilemma, hoe ver ga je OOP het DRY principe toepassen? En hoe leesbaar blijft code?
  
  * Vb 1: js-file-2.js = SLECHTE IMPLEMENTATIE, veel herhaling! wel leesbaar?     !! ?Y leesbaar? !! 30 LIJNEN CODE
  * Vb 2: js-file-2-should-be.js = BETERE IMPLEMENTATIE, weinig herhaling.        !! ?Y leesbaar? !! 14 LIJNEN CODE
  * Vb 3: js-file-2-shortest-possible.js = KORTSTE IMPLEMENTATIE?                 !! ?N leesbaar? !! 9  LIJNEN CODE
  * Vb 4: js-file-2-shortest-v2.js = KORTSTE IMPLEMENTATIE? HERBRUIKBAAR?         !! ?N leesbaar? !! 5  LIJNEN CODE
  
- Hoe ver kan ik dus refactoren, rekening houdend met ander developers die mijn code zouden moeten begrijpen nadien?